<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
</head>
<body>
    <?php
        include 'book.php';
        include 'booklist.php';
        $bookList = new BookList();

        $book1 = new Book();
        $book1->setTitle("Quyển 1");
        $book1->setAuthor("Tác giả A");
        $book1->setPublisher("A");
        $book1->setPublishYear(2022);
        $book1->setISBN("44342");
        $chapterList1 = array("Chapter 1", "Chapter 2", "Chapter 3");
        $book1->setChapterList($chapterList1);
        $bookList->addBook($book1);

        $book2 = new Book();
        $book2->setTitle("Quyển 2");
        $book2->setAuthor("Tác giả B");
        $book2->setPublisher("B");
        $book2->setPublishYear(2022);
        $book2->setISBN("44342");
        $chapterList2= array("Chapter 1", "Chapter 2");
        $book2->setChapterList($chapterList2);
        $bookList->addBook($book2);

        $book3 = new Book();
        $book3->setTitle("Quyển 3");
        $book3->setAuthor("Tác giả A");
        $book3->setPublisher("D");
        $book3->setPublishYear(2019);
        $book3->setISBN("4dd");
        $chapterList3 = array("Chapter 1");
        $book3->setChapterList($chapterList3);
        $bookList->addBook($book3);

        if (isset($_POST['submit'])) {
            $book = new Book();
            $book->setTitle($_POST['title']);
            $book->setAuthor($_POST['author']);
            $book->setPublisher($_POST['publisher']);
            $book->setPublishYear($_POST['publishYear']);
            $book->setISBN($_POST['isbn']);
            $chapterList = explode(",", $_POST['chapterList']);
            $book->setChapterList($chapterList);
            $bookList->addBook($book);
        }

        if (isset($_GET['sortType'])) {
            $sortType = $_GET['sortType'];
            $bookList->sortBookList($sortType);
        }

        $books = $bookList->getBookList();
    ?>
    <style>
        form label, form input {
            display: inline-block;
            vertical-align: top;
        }

        form label {
            width: 100px;
            text-align: right;
            margin-right: 10px;
        }

        form input[type="text"],
        form input[type="number"] {
            width: 200px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 2px 1px;
            cursor: pointer;
            border-radius: 4px;
            margin-left: 160px;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>

    <form method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required><br>

        <label for="author">Author:</label>
        <input type="text" name="author" required><br>

        <label for="publisher">Publisher:</label>
        <input type="text" name="publisher" required><br>

        <label for="publishYear">Publish Year:</label>
        <input type="number" name="publishYear" required><br>

        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" required><br>

        <label for="chapterList">Chapter List:</label>
        <input type="text" name="chapterList" required><br>

        <input type="submit" name="submit" value="Add Book">
    </form>

    <br>

    <table border="1">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Publish Year</th>
            <th>ISBN</th>            
            <th>Chapter List</th>
        </tr>
        <?php foreach ($books as $book) { ?>
            <tr>
                <td><?php echo $book->getTitle(); ?></td>
                <td><?php echo $book->getAuthor(); ?></td>
                <td><?php echo $book->getPublisher(); ?></td>
                <td><?php echo $book->getPublishYear(); ?></td>
                <td><?php echo $book->getISBN(); ?></td>
                <td><?php echo implode(", ", $book->getChapterList()); ?></td>
            </tr>
        <?php } ?>
    </table>
    <p>Sort by:</p>
    <ul>
        <li><a href="?sortType=title">Title</a></li>
        <li><a href="?sortType=author">Author</a></li>
        <li><a href="?sortType=year">Publish Year</a></li>
    </ul>
</body>
</html>