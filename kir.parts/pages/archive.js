function buildRow(data, content) {
  var row, cell;
  row = document.createElement("tr");
  cell = document.createElement("td");
  if (data.id) {
    row.id = data.id;
  }
  if (data.name) {
    cell.appendChild(document.createTextNode(data.name));
    cell.appendChild(document.createElement("br"));
  }
  if (data.logo) {
    var img = document.createElement("img");
    img.src = data.logo;
    img.alt = data.name;
    cell.appendChild(img);
    cell.classList.add("logo");
  }
  row.appendChild(cell);
  cell = document.createElement("td");
  if (data.desc) {
    for (var j = 0; j < data.desc.length; j++) {
      cell.appendChild(document.createTextNode(data.desc[j]));
      cell.appendChild(document.createElement("br"));
    }
  }
  row.appendChild(cell);
  cell = document.createElement("td");
  cell.innerHTML = "<a href='#buy' class='red-link'>Оформление подписки 1 номер за 1 &#8381;</a><br>Выберите №1,2,3,4,5,6-2019 или №1-2020";
  row.appendChild(cell);
  content.appendChild(row);
}
