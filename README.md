![](https://github.com/senselogic/PHOENIX/blob/master/LOGO/phoenix.png)

# Phoenix

Lightweight language and template engine which compiles to PHP.

## Description

Phoenix is a lightweight language and template engine which allows to program PHP web servers with a more concise and readable syntax.

## Features

* Keeps line numbers unchanged to ease development and debugging.
* Extracts inline scripts and style sheets into external files.
* Generates readable code, completely identical to handcrafted code.
* Integrates easily and seamlessly with existing code.
* Automatically watches file modifications for instant recompilation.

## Sample

```twig
<html>
    <head>
         <meta charset="utf8"/>
         <link rel="stylesheet" href="style.css">
    </head>
    <style file="style.styl">
        .text-color-gold
        {
            color: #C226D5 + 120deg - 20%;
        }

        .text-color-green
        {
            color: #84D5B9 - 50%;
        }
    </style>
    <body>
        <?
            local
                hello,
                hobbit,
                hobbit_count,
                message,
                bold,
                dwarf_name_array;

            import 'imported.php';
            include 'included.php';
            include 'included.php';

            import? 'notfound.php';
            include? 'notfound.php';

            hello = 'Hello';

            function GetMessage(
                string first_name,
                string last_name
                )
            {
                global
                    hello;
                static local
                    dear = 'dear';
                local
                    message;

                message = hello .. ' ' .. dear .. ' ' .. first_name .. ' ' .. last_name .. ' !';

                return message;
            }

            class HOBBIT
            {
                attribute
                    FirstName = '',
                    LastName = '',
                    RingCount = 0;

                static attribute
                    HobbitCount = 0;

                method constructor(
                    string first_name,
                    string last_name,
                    int ring_count
                    )
                {
                    .FirstName = first_name;
                    .LastName = last_name;
                    .RingCount = ring_count;

                    self::AddHobbit();
                }

                method destructor()
                {
                    .RemoveRings( .RingCount );

                    self::RemoveHobbit();
                }

                method AddRings(
                    int ring_count
                    )
                {
                    .RingCount += ring_count;
                }

                method RemoveRings(
                    int ring_count
                    )
                {
                    .RingCount -= ring_count;
                }

                static method AddHobbit()
                {
                    self::HobbitCount++;
                }

                static method RemoveHobbit()
                {
                    self::HobbitCount--;
                }

                static method GetHobbitCount()
                {
                    return self::HobbitCount;
                }
            }

            hobbit = new HOBBIT( 'Froddo', 'Baggins', 0 );

            hobbit.FirstName = 'Bilbo';
            hobbit.AddRings( 1 );

            hobbit_count = HOBBIT::GetHobbitCount();

            message = GetMessage( hobbit.FirstName, hobbit.LastName );
            echo '<p>' .. message .. '</p>';

            bold = '<b>bold</b>';

            dwarf_name_array = array( 'Balin', 'Dwalin', 'Oin', 'Gloin' );
        ?>
        <div>
            <p>
                There is <% hobbit_count %> hobbit.
            </p>
            <p>
                <% hobbit.FirstName .. ' ' .. hobbit.LastName %> has <% hobbit.RingCount %> ring.
            </p>
            <p>
                <% message %>
            </p>
            <p>
                <# bold #>
            </p>
            <p class="text-color-green">
                There are <% count( dwarf_name_array ) %> dwarves :
            </p>

            <ul>
                <? foreach ( var dwarf_name; dwarf_name_array ) { ?>
                    <li class="text-color-gold">
                        <% dwarf_name %>
                    </li>
                <? } ?>
            </ul>
        </div>
    </body>
</html>
```

## Syntax

Most of the PHP syntax is kept unchanged, except that :
* `.phx` files contain Phoenix code.
* `.pht` files contain a mix of HTML and Phoenix code.
* `..` is used to concatenate strings.
* `.` is used to access class members.
* `this` is implicit when accessing class attributes and methods.
* `$` is implicit when using static attributes and declared variables.
* `#` prevents the dollar insertion.
* `var` declares a local variable at first use.
* `local` declares local variables.
* `attribute` declares class attributes.
* `method` declares a class method.
* `constructor` is the constructor method.
* `destructor` is the destructor method.
* `foreach ( value; array )` is the foreach loop syntax.
* `include` includes a file with a relative path.
* `include?` includes a file with a relative path, if it exists.
* `import` includes a file once with a relative path.
* `import?` includes a file once with a relative path, if it exists.
* `<?` `?>` wraps Phoenix statements.
* `<%` `%>` wraps an escaped expression to output.
* `<#` `#>` wraps an unescaped expression to output.

## Limitations

* Local variables and class attributes must be declared.
* The PHP files are generated without grammatical checking.

## Installation

Install the [DMD 2 compiler](https://dlang.org/download.html) (using the MinGW setup option on Windows).

Build the executable with the following command line :

```bash
dmd -m64 phoenix.d
```

## Command line

```
phoenix [options] <input folder> <output_folder>
```

### Options

```
--extract <tag> <script folder> : extract scripts inside of this tag if they have a `file` attribute
--trim : trim extracted scripts
--create : create the PHP folders if needed
--watch : watch the Phoenix files for modifications
--pause 500 : time to wait before checking the Phoenix files again
```

### Examples

```bash
phoenix --extract style STYLE/ --trim --create PHX/ PHP/
```

Converts the Phoenix files of the `PHX/` folder into matching PHP files in the `PHP/` folder,
extracting style scripts into the `STYLE/` folder and creating the output folders if needed.

```bash
phoenix --extract style STYLE/ --trim --create --watch PHX/ PHP/
```

Converts the Phoenix files of the `PHX/` folder into matching PHP files in the `PHP/` folder,
extracting style scripts into the `STYLE/` folder and creating the output folders if needed,
then watches the Phoenix files for modifications.

## Version

1.0

## Author

Eric Pelzer (ecstatic.coder@gmail.com).

## License

This project is licensed under the GNU General Public License version 3.

See the [LICENSE.md](LICENSE.md) file for details.
