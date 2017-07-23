<html>
    <head>
         <meta charset="utf8"/>
    </head>
    <body>
        <?php
            
                
                
                
                
                
                

            require_once __DIR__ . '/' . 'imported.php';
            require __DIR__ . '/' . 'included.php';
            require __DIR__ . '/' . 'included.php';

            include_once __DIR__ . '/' . 'notfound.php';
            include __DIR__ . '/' . 'notfound.php';

            $hello = 'Hello';

            function GetMessage(
                string $first_name,
                string $last_name
                )
            {
                global
                    $hello;
                static 
                    $dear = 'dear';
                
                    

                $message = $hello . ' ' . $dear . ' ' . $first_name . ' ' . $last_name . ' !';

                return $message;
            }

            class HOBBIT
            {
                public
                    $FirstName = '',
                    $LastName = '',
                    $RingCount = 0;

                static 
                    $HobbitCount = 0;

                function __construct(
                    string $first_name,
                    string $last_name,
                    int $ring_count
                    )
                {
                    $this->FirstName = $first_name;
                    $this->LastName = $last_name;
                    $this->RingCount = $ring_count;

                    self::AddHobbit();
                }

                function __destruct()
                {
                    $this->RemoveRings( $this->RingCount );

                    self::RemoveHobbit();
                }

                function AddRings(
                    int $ring_count
                    )
                {
                    $this->RingCount += $ring_count;
                }

                function RemoveRings(
                    int $ring_count
                    )
                {
                    $this->RingCount -= $ring_count;
                }

                static function AddHobbit()
                {
                    self::$HobbitCount++;
                }

                static function RemoveHobbit()
                {
                    self::$HobbitCount--;
                }

                static function GetHobbitCount()
                {
                    return self::$HobbitCount;
                }
            }

            $hobbit = new HOBBIT( 'Froddo', 'Baggins', 0 );

            $hobbit->FirstName = 'Bilbo';
            $hobbit->AddRings( 1 );

            $hobbit_count = HOBBIT::GetHobbitCount();

            $message = GetMessage( $hobbit->FirstName, $hobbit->LastName );
            echo '<p>' . $message . '</p>';

            $escaped_message = '<escaped></message>';

            $dwarf_name_array = array( 'Balin', 'Dwalin', 'Oin', 'Gloin' );
        ?>

        <p>
            There is <?php echo $hobbit_count; ?> hobbit.
        </p>
        <p>
            <?php echo $hobbit->FirstName . ' ' . $hobbit->LastName; ?> has <?php echo $hobbit->RingCount; ?> ring.
        </p>
        <p>
            <?php echo $message; ?>
        </p>
        <p>
            <?php echo htmlspecialchars( $escaped_message ); ?>
        </p>
        <p>
            There are <?php echo count( $dwarf_name_array ); ?> dwarves :
        </p>

        <ul>
            <?php foreach ( $dwarf_name_array as  $dwarf_name ) { ?>
                <li>
                    <?php echo $dwarf_name; ?>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>
