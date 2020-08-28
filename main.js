const nav = document.getElementById("nav");
const footer = document.getElementById("footer");
let navTime;
let footerTime;

const TypeWriter = function(txtElement, words, wait = 2000) {
  this.txtElement = txtElement;
  this.words = words;
  this.txt = "";
  this.wordIndex = 0;
  this.wait = parseInt(wait, 10);
  this.type();
  this.isDeleting = false;
};

function init() {
  const txtElement = document.querySelector(".txt-type");
  const words = JSON.parse(txtElement.getAttribute("data-words"));
  const wait = txtElement.getAttribute("data-wait");

  new TypeWriter(txtElement, words, wait);
}

TypeWriter.prototype.type = function() {
  const current = this.wordIndex % this.words.length;
  const fullTxt = this.words[current];

  //check if word is deleting
  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }
  //insert text into element
  this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

  //initial typeSpeed
  let typeSpeed = 200;
  if (this.isDeleting) {
    typeSpeed /= 2;
  }

  //check if the word is complete
  if (!this.isDeleting && this.txt === fullTxt) {
    typeSpeed = this.wait;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
    this.isDeleting = false;
    this.wordIndex++;

    //pause before typing
    typeSpeed = 600;
  }
  setTimeout(() => this.type(), typeSpeed);
};

//Make NavBar and Footer Disapper
window.addEventListener("mousemove", () => {
  nav.classList.remove("hideNav");
  footer.classList.remove("hideNav");

  clearTimeout(navTime);
  clearTimeout(footerTime);

  mouseTimeout();
});

function mouseTimeout() {
  navTime = setTimeout(() => nav.classList.add("hideNav"), 1500);
  footerTime = setTimeout(() => footer.classList.add("hideNav"), 1500);
}

init();
