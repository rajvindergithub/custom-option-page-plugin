<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Add Employee - EMS System</title>
    <meta name="author" content="Your Name">
    <meta name="description" content="Example description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    
    

<style type="text/css">
    main.addemployee {
        width: 95%;
        margin: auto;
        max-width: 100%;
        margin-left: 2%;
    }

    h1 {
        text-align: center;
        font-weight: 700;
        font-size: 2rem;
        background-color: aquamarine;
        padding: 1rem;
    }

</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <main class="addemployee">
        <h1>Add Employee - EMS System</h1>

        <section>


            <form action="/action_page.php">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone">
                </div>
                
                
                <div class="form-group">
                    <label for="gender">Gender:</label>
                     <select id="gender" class="form-control" >
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                
                <div class="form-group">
                    <label for="pwd">Designation</label>
                    <input type="text" class="form-control" id="designation">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </section>

    </main>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript" src=""></script>

</html>
