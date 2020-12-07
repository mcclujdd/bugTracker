<?php
define('__ROOT__',dirname(__FILE__));
require_once(__ROOT__.'/scripts/mysqlAccess.php');

if(isset($_POST['submit'])){
  echo $_POST['error'].'</br>';
  echo $_POST['description'];
}

?>

<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="/styles/main.css">
    <title>Bug Tracker</title>
  </head>
    <body>

<!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid" >
          <h1>Dashboard</h1>
        </div>

<!-- navbar -->

        <nav class="navbar navbar-toggleable-md navbar-light">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Tickets</button>
          </form>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home</a>
                <a class="nav-item nav-link" href="#">Tickets</a>
                <a class="nav-item nav-link" href="#">Settings</a>
            </div>


          </div>
        </nav>

<!-- Main Content -->
        <div class="container-fluid " style="background: rgba(60, 136, 63, 0.2)">
          <div class="row">
            <!-- panel for important updates and relevant information that can be dismissed -->
            <div class="panel panel-info"></div>
          </div>
        </div>
<!-- Ticket Information adn manipulation -->
        <div class="container-fluid">
          <table class="table table-fluid table-dark active_tickets" id="ticketTable">
            <h2>Active Tickets</h2>
        </div>

<?php require_once(__ROOT__.'/scripts/newTicket.php');?>




            <thead>
              <tr>
                <!-- this should populate with a script based on active tickets assigned to current user in the database -->
                <th>Ticket</th>
                <th>Status</th>
                <th>Last Modified</th>
                <th>Modified by</th>
                <th>Error Message</th>
                <th>Placeholder</th>
              </tr>
            </thead>
              <tbody id="tBody">
              </tbody>
          </table>

          <template id="rowTemplate">
            <tr>
              <td><a href="#">Link to Ticket</a></td>
              <td>(date)</td>
              <td>(status)</td>
              <td>(date)</td>
              <td>(error)</td>
              <td>
                <button class="btn dropdown-toggle" data-toggle="dropdown" data-target="ticketOptions">Options</button>
                <div class="dropdown-menu" id="ticketOptions">
                  <a class="dropdown-item" href="#">Export</a>
                  <a class="dropdown-item" href="#">Squash</a>
                  <a class="dropdown-item" href="#">Edit</a>
                  <a class="dropdown-item" href="#" onclick="deleteTicket(this)">Delete</a>
                </div>
              </td>
            </tr>
          </template>

          <div class="container-fluid">
            <h3>More Information</h3>
            <p>content1: lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>

<!-- scripts -->
  <div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </div>
    <script src="scripts/new_ticket.js"></script>
  </body>
</html>