<?php declare(strict_types = 1); ?>
<body>
    <?php
        abstract class Clock
        {
            public function setTime(string $time, $extraArguments = null)
            {
                // 何かしらの処理
            }
        }

        class DigitalClock extends Clock
        {
            public function setTime(string $time, $extraArguments = null)
            {
                // デジタル時計の何らかの処理, $extraArguments引数は無視
            }
        }

        class AnalogClock extends Clock
        {
            public function setTime(string $time, $extraArguments = null)
            {
                // アナログ時計の何かしらの処理, $extraArguments引数は無視
            }
        }

        $digitalClock = new DigitalClock();
        $digitalClock->setTime('11:14', [
            'fontColor' => 'white'
        ]);
        $analogClock = new AnalogClock();
        $analogClock->setTime('11:14');
    ?>
</body>
