<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19</title>
    <?php include_once('sections/links.tpl'); ?>
</head>

<body>

    <!-- ////////////// navbar start \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/navbar.tpl'); ?>


    <section class="corona_update container_fluid">
        <div class="my-5">
            <h3 class="text-center text-uppercase">covid-19 live updates of india</h3>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <tr>    
                    <th>S.N.</th>
                    <th>State</th>
                    <th>Active</th>
                    <th>Confirmed</th>
                    <th>Recovered</th>
                    <th>Deaths</th>
                </tr>

                <?php
                $data = file_get_contents('https://api.covid19india.org/data.json');
                $coronalive = json_decode($data, true);

                $statescount = count($coronalive['statewise']);
                $i = 0;
                while($i < $statescount) {
                ?>
                    <tr>
                        <td><?php echo $i + 1; ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['state']; ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['active']; ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['confirmed']; ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['recovered']; ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['deaths']; ?></td>
                    </tr>

                <?php

                    $i++;
                }

                ?>
            </table>
        </div>
    </section>



    <!-- ////////////// footer \\\\\\\\\\\\\\\\\\  -->

    <?php include_once('sections/footer.tpl'); ?>


    <!-- bootstrap links  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- top btn script  -->
    <script type="text/javascript" src="javascript/script.js"></script>
</body>

</html>