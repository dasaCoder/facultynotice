<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Facult Notice</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <style>
            nav{
                background-color: black;
            }
        </style>
    </head>
    <body>

    <nav>
        <div class="nav-wrapper">
            <a style="    padding-left: 15px;" href="#" class="brand-logo">Faculty Notice</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Home</a></li>

            </ul>
        </div>
    </nav>

    <br><br><br>

    <div class="container">
        <form action="{{ url('store') }}" method="post">

            {{ csrf_field() }}

            <div class="input-field">
                <select name="faculty_id" id="">
                    <option value="1">Faculty of Commerce and Management</option>
                    <option value="2">Faculty of Graduate Studies</option>

                    <option value="3">Faculty of Humanities</option>
                    <option value="4">Faculty of Science</option>
                    <option value="5">Faculty of Social Sciences</option>


                </select>
            </div>

            <div class="input-field">
                <select name="department_id" id="">
                    <option value="1">Department of Archaelogy</option>
                    <option value="2">Department of Economics</option>
                    <option value="3">Department of Geography</option>
                    <option value="4">Department of History</option>
                    <option value="5">Department of International Studies</option>
                    <option value="6">Department of Library and Information Science</option>

                </select>
            </div>

            <div class="input-field">
                <textarea name="body" id="body" class="materialize-textarea"></textarea>
            </div>

            <button style="background: #5C0605" class="btn waves-effect waves-light" type="submit" >Submit

            </button>



        </form>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);


        });
    </script>
    </body>
</html>
