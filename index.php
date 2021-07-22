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
    <div class="container mx-auto w-80 mt-32 bg-green-200">
        <div class="flex justify-center items-center p-10">
            <form action="./controllers/data-book.php" method="post">
                <div class="text-lg text-red-600 font-serif py-1">
                    <label for="#">title <br><input class="rounded px-4" maxlength="55" type="text" name="title" id=""
                            required></label>
                </div>
                <div class="text-lg text-red-600 font-serif py-1">
                    <label for="#">ISBN <br><input class="rounded px-4" type="text" name="ISBN" id="" required></label>
                </div>
                <div class="text-lg text-red-600 font-serif py-1">
                    <label for="#">pub_year <br><input class="rounded px-4" type="number" minlength="4" min="1"
                            name="pub_year" id="" required></label>
                </div>
                <div class="text-lg text-red-600 font-serif py-1">
                    <label for="#">authorid <br><input class="rounded px-4" type="number" min="1" name="authorid" id=""
                            required></label>
                </div>
                <div class="text-lg text-red-600 font-serif py-1">
                    <label for="#">available <br><input class="rounded px-4" type="number" min="1" name="available"
                            id="" required></label>
                </div>
                <div class=" text-white mt-4 flex justify-center items-center">
                    <input class="bg-blue-300 rounded py-2 px-3" type="submit" value="creat">
                </div>
            </form>
        </div>
    </div>
</body>

</html>