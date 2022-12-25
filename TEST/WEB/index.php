<html>
    <head>
         <meta charset="utf8"/>
         <link rel="stylesheet" href="style.css">
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

            $bold = '<b>bold</b>';

            $dwarf_name_array = array( 'Balin', 'Dwalin', 'Oin', 'Gloin' );
        ?>
        <div>
            <p>
                There is <?php echo htmlspecialchars( $hobbit_count ); ?> hobbit.
            </p>
            <p>
                <?php echo htmlspecialchars( $hobbit->FirstName . ' ' . $hobbit->LastName ); ?> has <?php echo htmlspecialchars( $hobbit->RingCount ); ?> ring.
            </p>
            <p>
                <?php echo htmlspecialchars( $message ); ?>
            </p>
            <p>
                <?php echo $bold; ?>
            </p>
            <p class="text-color-green">
                There are <?php echo htmlspecialchars( count( $dwarf_name_array ) ); ?> dwarves :
            </p>

            <ul>
                <?php foreach ( $dwarf_name_array as  $dwarf_name ) { ?>
                    <li class="text-color-gold">
                        <?php echo htmlspecialchars( $dwarf_name ); ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </body>
</html>
