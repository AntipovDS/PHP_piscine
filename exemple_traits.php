<?php

!!!!!!!!!!!!!!!НЕ ДОПИСАНО!!!!!!!!!!! ДОПИСАТЬ ПОТОМ!!!!!!!!!!!! piscine php day 08 traits!!!!


Class ExempleA {

    public function __construct(array $kwargs)
    {
        print ('Constructor of class ExempleA called' . PHP_EOL);
        $this->dumpJson ($kwargs);
        $this->dumpHTML ($kwargs);
        return;
    }

    public function __destruct()
    {
        print ('Destructor of class ExempleA called' . PHP_EOL);
        return;
    }

    public function dumpJson (array $dict) {
        end ($dict);
        $last = key ($dict);
        print ('{' . PHP_EOL);
        foreach ($dict as $k => $v) {
            if ($k !== $last)
                printf("\t\"%s\": \"%s\",%s", $k, $v, PHP_EOL);
            else
                printf("\t\"%s\": \"%s\"%s", $k, $v, PHP_EOL);
        }
        print('}' . PHP_EOL);
        return;
    }

    public function dumpHTML(array $dict) {

        echo <<<END
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dump HTML</title>
    </head>
    <body>
        <dl>
        
END;

        foreach ($dict as $k => $v) {
            echo "\t\t\t<dt>$k</dt>dt>" . PHP_EOL;
            echo "\t\t\t<dd>$v</dd>dd>" . PHP_EOL;
        }

        echo <<<END
        </dl>
    </body>
</html>

END;
        return;
    }
}

C