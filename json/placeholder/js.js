const q = document.getElementById("q")

fetch('https://jsonplaceholder.typicode.com/todos/1')
      .then(response => response.json())
      .then(json => console.log(json))
     
     
     
.then(json => q.innerHTML = json.title)





