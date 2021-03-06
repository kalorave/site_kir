function buildRow(data, content) {
  row = document.createElement("tr");
  cell = document.createElement("td");
  if (data.id) {
    row.id = data.id;
  }
  cell.appendChild(document.createTextNode(data.name));
  var img = document.createElement("br");
  cell.appendChild(img);
  img = document.createElement("img");
  img.src = data.logo;
  img.alt = '';
  cell.appendChild(img);
  cell.classList.add("logo");
  row.appendChild(cell);
  cell = document.createElement("td");
  cell.appendChild(document.createTextNode(data.desc));
  // cell.classList.add("desc");
  row.appendChild(cell);
  cell = document.createElement("td");
  cell.appendChild(document.createTextNode(data.address));
  img = document.createElement("br");
  cell.appendChild(img);
  for (var j = 0; j < data.contacts.urls.length; j++) {
    var link = document.createElement("a");
    link.href = '//' + data.contacts.urls[j];
    link.appendChild(document.createTextNode(data.contacts.urls[j]));
    link.classList.add("pink");
    link.target = "_blank";
    cell.appendChild(link);
    img = document.createElement("br");
    cell.appendChild(img);
  }
  for (var j = 0; j < data.contacts.email.length; j++) {
    var link = document.createElement("a");
    link.href = 'mailto:' + data.contacts.email[j];
    link.appendChild(document.createTextNode(data.contacts.email[j]));
    link.classList.add("blue-link");
    cell.appendChild(link);
    img = document.createElement("br");
    cell.appendChild(img);
  }
  for (var j = 0; j < data.contacts.phone.length; j++) {
    var link = document.createElement("a");
    link.href = 'tel:' + data.contacts.phone[j].href;
    link.appendChild(document.createTextNode(data.contacts.phone[j].text));
    cell.appendChild(link);
    img = document.createElement("br");
    cell.appendChild(img);
  }
  row.appendChild(cell);
  content.appendChild(row);
}
