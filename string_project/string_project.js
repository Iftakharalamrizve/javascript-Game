var long_text = document.querySelector("#search_value");
var small_text = document.querySelector("#search_key");
var result = document.querySelector("#data");

small_text.addEventListener("keypress", function() {
  result.innerHTML = `dkfjdskfds`;
  var match = long_text.value.indexOf(small_text.value);
  if (match === -1) {
    result.innerHTML = `The ${small_text.value} is not found`;
  } else {
    result.innerHTML = `The ${
      small_text.value
    } is found and this value location is 
    ${match}`;
  }
});
