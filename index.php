
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>php div</title>


    <link rel="stylesheet" href="css_form/style.css">
</head>

<body>

    <form action="trt.php" method="POST">

        <div class="profil div ">
            <div class="f">
                <h1>
                    Profile
                </h1>
                <span style="width: 80%; height: 1.5px; background-color: #cecdcdcb; border-radius: 100%;"></span>

                <input class="text" type="text" name="lastname" placeholder="Last name">
                <input class="text" type="text" name="firstname" placeholder="Firstname">
                <input class="text" type="text" name="adress" placeholder="Adress">
                <textarea class="text" name="description" id="desc" cols="30" rows="10" placeholder="Description"></textarea>
                <!-- Les explications n'ont pas été laborieuses Les stagiaires ont compris 
                tout ce qui leu demandant plus de précisions sur certains points. 
                Is ont pris des notes, ont fait part de leur accord fonctionné, 
                du premier coup. Les conditions
                matérielles n'ont eu aucun impact sur la pédagogie. -->
                <br>
                <input type="file" name="image" id="">

            </div>
        </div>
        <div class="work-experiences div ">
            <div class="y1 f">
                <h1>
                    Experience
                </h1>
                <span style="width: 80%; height: 1.5px; background-color: #cecdcdcb; border-radius: 100%;"></span>

                <div class="years ">
                    <input class="text year" type="month" name="year1" placeholder="Nom">
                    <input class="text year" type="month" name="year2" placeholder="Prénom">

                </div>
                <input class="text" type="text" name="work1" placeholder="Work">
                <input class="text" type="text" name="post1" placeholder="post">
            </div>

            <div class="y2 f">
                <h1>
                    Experience
                </h1>
                <span style="width: 80%; height: 1.5px; background-color: #cecdcdcb; border-radius: 100%;"></span>

                <div class="years ">
                    <input class="text year" type="month" name="year3" placeholder="Year">
                    <input class="text year" type="month" name="year4" placeholder="Prénom">

                </div>
                <input class="text" type="text" name="work2" placeholder="Work">
                <input class="text" type="text" name="post2" placeholder="post">
            </div>

            <div class="y3 f">
                <h1>
                    Experience
                </h1>
                <span style="width: 80%; height: 1.5px; background-color: #cecdcdcb; border-radius: 100%;"></span>

                <div class="years ">
                    <input class="text year" type="month" name="year5" placeholder="Nom">
                    <input class="text year" type="month" name="year6" placeholder="Prénom">

                </div>
                <input class="text" type="text" name="work3" placeholder="Work">
                <input class="text" type="text" name="post3" placeholder="post">

            </div>
        </div>

        <div class="awrds div">
            <div class="f">
                <h1>
                    Aword & Achievements
                </h1>
                <span style="width: 80%; height: 1.5px; background-color: #cecdcdcb; border-radius: 100%;"></span>

                <input class="text" style="width: 200px;" type="month" name="awyear1" placeholder="Nom">

                <input class="text" type="text" name="award1" placeholder="Award">
                <input class="text" type="text" name="award2" placeholder="Award">
            </div>
        </div>

        <div class="awrds div">
            <div class="f">
                <h1>
                    Aword & Achievements
                </h1>
                <span style="width: 80%; height: 1.5px; background-color: #cecdcdcb; border-radius: 100%;"></span>

                <input class="text" style="width: 200px;" type="month" name="awyear2" placeholder="Nom">

                <input class="text" type="text" name="award3" placeholder="Award">
                <input class="text" type="text" name="award4" placeholder="Award">
                <input class="text" type="text" name="award5" placeholder="Award">
            </div>
        </div>

        <div class="awrds div">
            <div class="f" action="./cv.php" method="POST">
                <h1>
                    Aword & Achievements
                </h1>
                <span style="width: 80%; height: 1.5px; background-color: #cecdcdcb; border-radius: 100%;"></span>

                <!-- <label for="">Year</label> -->
                <input class="text" style="width: 200px;" type="month" name="awyear2" placeholder="Nom">

                <input class="text" type="text" name="award3" placeholder="Award">
                <input class="text" type="text" name="award4" placeholder="Award">
                <input class="text" type="text" name="award5" placeholder="Award">
            </div>
        </div>
        <div class="send">
            <input type="submit" value="Send">
        </div>
    </form>







</body>

</html>
