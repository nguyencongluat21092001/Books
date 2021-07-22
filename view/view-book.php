<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container  mx-auto mt-32 bg-green-200" style="width: 700px;">
        <div class="flex justify-center items-center pt-4">
            <form method="post">
                <input type="text" class="rounded px-2 py-1" name="search" id="" placeholder="search name...">
                <input type="submit" class="font-serif rounded px-2 py-1" name="btn" id="">
            </form>
        </div>
        <div class="flex justify-center items-center pb-5 pt-2">

            <table>
                <thead>
                    <tr>
                        <th class="px-3 py-2 border border-red-400  font-serif">STT</th>
                        <th class="px-3 py-2 border border-red-400  font-serif">Title</th>
                        <th class="px-3 py-2 border border-red-400  font-serif">Authorid</th>
                        <th class="px-3 py-2 border border-red-400  font-serif">ISBN</th>
                        <th class="px-3 py-2 border border-red-400  font-serif">Pub_year</th>
                        <th class="px-3 py-2 border border-red-400  font-serif">Available</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    try {
                        $local = new PDO("mysql:host=localhost;dbname=Books;charset=utf8", 'root', 'root');
                        // echo "connect ok";
                    } catch (PDOException $e) {
                        echo "return connect false";
                    }
                    if (isset($_POST['btn'])) {
                        $title = $_POST['search'];
                        $sql = "select * from book where title like '%$title%'";
                    } else {
                        $sql = "select * from book";
                    }

                    $totel = $local->query($sql);
                    foreach ($totel as $key => $val) {

                    ?>
                    <tr>
                        <td class="px-3 py-2 border border-red-400  font-serif"><?php echo ($key + 1) ?></td>
                        <td class="px-3 py-2 border border-red-400  font-serif"><?php echo $val['title'] ?></td>
                        <td class="px-3 py-2 border border-red-400  font-serif"><?php echo $val['authorid'] ?></td>
                        <td class="px-3 py-2 border border-red-400  font-serif"><?php echo $val['ISBN'] ?></td>
                        <td class="px-3 py-2 border border-red-400  font-serif"><?php echo $val['pub_year'] ?></td>
                        <td class="px-3 py-2 border border-red-400  font-serif"><?php echo $val['available'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>