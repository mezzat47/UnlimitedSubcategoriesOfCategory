<?php
	echo $menu;
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        How to handle events in dynamically
        created elements in jQuery?
    </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".list li").on("click", function (event) {
            console.log(event.target);

            $.post("<?=base_url()?>index.php/menus/store",
            { parent_id: event.target.getAttribute('id'),
             	name:'Sub Category '+event.target.getAttribute('id'),
              	level: event.target.getAttribute('data-level') },
              	 function(response){
                  console.log(response);
                  $(event.target).append(response)
            	});
            });
        });
    </script>

    <style>
        li {
            font-size: 30px;
            width: 400px;
            padding: 20px;
            color: green;
        }
    </style>
</head>

<body>

</body>

</html>
