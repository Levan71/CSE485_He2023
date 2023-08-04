const bookList = new BookList();

function addBook() {
  const title = document.getElementById("title").value;
  const author = document.getElementById("author").value;
  const publisher = document.getElementById("publisher").value;
  const publicationYear = parseInt(document.getElementById("publicationYear").value);
  const ISBN = document.getElementById("ISBN").value;
  const chapters = document.getElementById("chapters").value.split("\n");

  const book = new Book(title, author, publisher, publicationYear, ISBN, chapters);
  bookList.addBook(book);

  displayBooks();
}

function displayBooks() {
  const bookListDiv = document.getElementById("bookList");
  bookListDiv.innerHTML = "";

  for (let book of bookList.books) {
    const bookDiv = document.createElement("div");
    bookDiv.classList.add("book");

    const titleElement = document.createElement("h2");
    titleElement.textContent = book.title;
    bookDiv.appendChild(titleElement);

    const authorElement = document.createElement("p");
    authorElement.textContent = `Author: ${book.author}`;
    bookDiv.appendChild(authorElement);

    const publisherElement = document.createElement("p");
    publisherElement.textContent = `Publisher: ${book.publisher}`;
    bookDiv.appendChild(publisherElement);

    const publicationYearElement = document.createElement("p");
    publicationYearElement.textContent = `Publication Year: ${book.publicationYear}`;
    bookDiv.appendChild(publicationYearElement);

    const ISBNElement = document.createElement("p");
    ISBNElement.textContent = `ISBN: ${book.ISBN}`;
    bookDiv.appendChild(ISBNElement);

    const chaptersElement = document.createElement("ul");
    for (let chapter of book.chapters) {
      const chapterElement = document.createElement("li");
      chapterElement.textContent = chapter;
      chaptersElement.appendChild(chapterElement);
    }
    bookDiv.appendChild(chaptersElement);

    bookListDiv.appendChild(bookDiv);
  }
}

function sortBooksByAuthor() {
  bookList.sortBooksByAuthor();
  displayBooks();
}

function sortBooksByTitle() {
  bookList.sortBooksByTitle();
  displayBooks();
}

function sortBooksByPublicationYear() {
  bookList.sortBooksByPublicationYear();
  displayBooks();
}

// Get the "add book" button element
const Button = document.getElementById("addBook");

// Add a click event listener to the button
Button.addEventListener("click", function() {
  // Redirect to the add book page
    window.location.href = ".OOP/admin/addbook.php";

});
// xử lý AddBook
// Get the button element
const addButton = document.getElementById("add-book-button");

// Add a click event listener to the button
addButton.addEventListener("click", function() {
  // Code to handle the button click event goes here
});
// Get the form element
const addBookForm = document.getElementById("add-book-form");

// Add a submit event listener to the form
addBookForm.addEventListener("submit", function(event) {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Get the input values from the form
  const title = document.getElementById("title").value;
  const author = document.getElementById("author").value;
  const isbn = document.getElementById("isbn").value;

  // Validate the input values
  if (title && author && isbn) {
    // Add the book to a list or database
    // ...
    
    // Clear the form
    addBookForm.reset();
  }
});