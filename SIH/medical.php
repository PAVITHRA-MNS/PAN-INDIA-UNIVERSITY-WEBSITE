<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDICAL STREAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style media="screen">
    .med-heading {
      text-align: center;
      color: red;
    }
    body {
      background-image: url("images/medicalbgimg.png");
      background-size: cover;
      padding-top: 0%;
      padding-left: 2%;
      padding-right: 2%;
    }
    .big-heading {
      background-color: #FF004D;
    }
    .med-heading {
      color: white;
    }
    .heading {
      text-align: center;
      background-color: #FF004D;
      color: white;
      margin: 2%;
      padding: 2%;
    }

    .tables {
      margin: 3%;
      border-style: double;
      border-radius: 15%;
      border-color: red;
      padding: 1%;
    }

    body {
      background-image: url(images/medicalbgimg.png);
      background-size: cover;
    }

    p {
      color: black;
    }

    .heading3 {
      color: red;
    }

    img {
      border-radius: 20%;
      margin-right: 30px;
      width: 300px;
      height: 250px;
    }

    .med-desc {
      color: red;
    }
    .card-body.row {
      background-image: url("images/medicalbgimg.png");
      background-size: cover;
    }

    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="big-heading card-header">
                        <h4 class="med-heading">MEDICAL STREAM</h4>
                    </div>
                </div>
            </div>

            <!-- State Filter  -->
            <div class="col-md-3" >
                <form action="" method="GET" style="position : fixed; width : 20%;">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5 >FILTER
                                <button type="submit" class="btn btn-danger btn-sm float-end" style="background-color : #FF004D;">Search</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6><em>States</em></h6>
                            <hr>
                            <?php
                                $con = mysqli_connect("localhost","root","","college");

                                $state_query = "SELECT * FROM state";
                                $state_query_run  = mysqli_query($con, $state_query);

                                if(mysqli_num_rows($state_query_run) > 0)
                                {
                                    foreach($state_query_run as $statelist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['states']))
                                        {
                                            $checked = $_GET['states'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="states[]" value="<?= $statelist['sid']; ?>"
                                                    <?php if(in_array($statelist['sid'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $statelist['sname']; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No States Found";
                                }
                            ?>
                        </div>
                    </div>
                </form>


            </div>



            <!-- Colleges-->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php
                            if(isset($_GET['states']))
                            {
                                $statechecked = [];
                                $statechecked = $_GET['states'];
                                foreach($statechecked as $rowstate)
                                {
                                    // echo $rowstate;
                                    $colleges = "SELECT * FROM collegetable WHERE stateid IN ($rowstate)";
                                    $colleges_run = mysqli_query($con, $colleges);
                                    if(mysqli_num_rows($colleges_run) > 0)
                                    {
                                        foreach($colleges_run as $collegeitems) :
                                            ?>
                                                <div class="col-md-12 mt-3">
                                                    <div class=" p-2">
                                                        <div class="tables">
                                                          <style media="screen">
                                                            .tables {
                                                              padding: 4%;
                                                            }
                                                          </style>
                                                          <table>
                                                            <tr>
                                                              <td>
                                                                <h3 class="heading3"><?= $collegeitems['name'];  ?></h3>

                                                                <h6 class="med-desc">LOCATION : <?= $collegeitems['location']; ?></h6>
                                                                <h6 class="med-desc">RATINGS : <?= $collegeitems['rating']; ?></h6>
                                                                <p><?= $collegeitems['description']; ?></p>
                                                                <h6 class="med-desc">COURSE : <?= $collegeitems['course']; ?></h6>
                                                                <h6 class="med-desc">FIRST YEAR FEE : <?= $collegeitems['feeinfo']; ?></h6>
                                                                <a
                                                                  href=<?= $collegeitems['button']; ?>><button
                                                                    type="button" name="button" class="btn btn-outline-danger">VIEW DETAILS </button> </a>
                                                              </td>
                                                            </tr>
                                                          </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            else
                            {
                                $colleges = "SELECT * FROM collegetable";
                                $colleges_run = mysqli_query($con, $colleges);
                                if(mysqli_num_rows($colleges_run) > 0)
                                {
                                    foreach($colleges_run as $collegeitems) :
                                        ?>
                                            <div class="col-md-12 mt-3">
                                                <div class=" p-2">
                                                    <div class="tables">
                                                      <style media="screen">
                                                        .tables {
                                                          padding: 4%;
                                                        }
                                                      </style>
                                                      <table>
                                                        <tr>
                                                          <td>
                                                            <h3 class="heading3"><?= $collegeitems['name'];  ?></h3>

                                                            <h6 class="med-desc">LOCATION : <?= $collegeitems['location']; ?></h6>
                                                            <h6 class="med-desc">RATINGS : <?= $collegeitems['rating']; ?></h6>
                                                            <p><?= $collegeitems['description']; ?></p>
                                                            <h6 class="med-desc">COURSE : <?= $collegeitems['course']; ?></h6>
                                                            <h6 class="med-desc">FIRST YEAR FEE : <?= $collegeitems['feeinfo']; ?></h6>
                                                            <a
                                                              href=<?= $collegeitems['button']; ?>><button
                                                                type="button" name="button" class="btn btn-outline-danger">VIEW DETAILS </button> </a>
                                                          </td>
                                                        </tr>
                                                      </table>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php
                                    endforeach;
                                }
                                else
                                {
                                    echo "No Colleges Found";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>



        </div>
    </div>



            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
            </body>
            </html>
