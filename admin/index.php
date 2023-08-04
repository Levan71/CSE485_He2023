<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Book List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Book List</h1>
    <form>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title"><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author"><br>

        <label for="publisher">Publisher:</label>
        <input type="text" id="publisher" name="publisher"><br>

        <label for="publicationYear">Publication Year:</label>
        <input type="number" id="publicationYear" name="publicationYear"><br>

        <label for="ISBN">ISBN:</label>
        <input type="text" id="ISBN" name="ISBN"><br>

        <label for="chapters">Chapters:</label>
        <textarea id="chapters" name="chapters"></textarea><br>

        <button type="button" onclick="addBook()">Add Book</button>
        <button type="button" onclick="sortBooksByAuthor()">Sort by Author</button>
        <button type="button" onclick="sortBooksByTitle()">Sort by Title</button>
        <button type="button" onclick="sortBooksByPublicationYear()">Sort by Publication Year</button>

        
    </form>
    <div id="bookList"></div>
    <script src="app.js"></script>
</body>

</html>