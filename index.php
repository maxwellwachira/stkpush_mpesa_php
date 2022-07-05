<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet"/>


    <title>STK Push Mpesa</title>

</head>
<body>

    <header>
        <nav class="navbar bg-success">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h3 text-white">Mpesa STK Push</span>
            </div>
        </nav>
    </header>
    <main>
    <div class="card">
        <div class="center">
            <img src="mpesa-logo.png" class="card-img-top" alt="mpesa logo">
        </div>  
        <div class="card-body">
            <form method="POST" action="stk_push.php">
                <div class="mb-3">
                    <label for="number" class="form-label">Mpesa Number</label>
                    <input type="phonenumber" class="form-control" id="phonenumber" name="phonenumber" placeholder="254703519593" aria-describedby="phoneHelp" required>
                    <div id="phoneHelp" class="form-text">Mpesa Number <b>MUST</b> start with '254'</div>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="1" aria-describedby="amountHelp" required>
                    <div id="amountHelp" class="form-text">Amount to Send in Kenya Shillings e.g. 1 KSh.</div>
                </div>
                
                <div class="center">
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                </div>
                
            </form>
        </div>
    </div>  
    </main>
    
</body>
</html>