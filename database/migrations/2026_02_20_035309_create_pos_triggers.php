<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Drop first if exists
        DB::unprepared('DROP TRIGGER IF EXISTS trg_update_payment_dets');
        DB::unprepared('DROP TRIGGER IF EXISTS trg_day_end_update');

        // Trigger 1
        DB::unprepared('
            CREATE TRIGGER trg_update_payment_dets
            AFTER INSERT ON transaction_dets
            FOR EACH ROW
            BEGIN
                IF NEW.DocumentID IN (8, 9) THEN
                    UPDATE payment_dets
                    SET DocumentID = NEW.DocumentID
                    WHERE Receipt = NEW.Receipt;
                END IF;
            END
        ');

        // Trigger 2
        DB::unprepared('
            CREATE TRIGGER trg_day_end_update
            AFTER UPDATE ON day_starts
            FOR EACH ROW
            BEGIN
                IF OLD.IsDayEnd = 0 AND NEW.IsDayEnd = 1 THEN

                    UPDATE payment_dets
                    SET IsDayEnd = 1
                    WHERE IsDayEnd = 0;

                    UPDATE transaction_dets
                    SET IsDayEnd = 1
                    WHERE IsDayEnd = 0;

                END IF;
            END
        ');
    }

    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS trg_update_payment_dets');
        DB::unprepared('DROP TRIGGER IF EXISTS trg_day_end_update');
    }
};
