const X = document.getElementById("demo");
const Y = document.getElementById("input");

const contentNode = document.createElement("p");
const text = document.createTextNode("Hey I'm red");
contentNode.appendChild(text);

const container = document.getElementById("div1");
container.appendChild(contentNode);
contentNode.style.color = "red";

//blue h3
const bluePara = document.createElement("h3");
const BlueText = document.createTextNode("aaaa I'm blue h3!");
bluePara.appendChild(BlueText);

container.appendChild(bluePara);
bluePara.style.color = "blue";

//create a new div
const NewDiv = document.createElement("div");
NewDiv.setAttribute("id", "div2");
NewDiv.setAttribute("class", "conatiner primary collapse");
NewDiv.style.border = "1px solid green";
NewDiv.style.padding = "1rem";
NewDiv.style.textAlign = "center";

container.appendChild(NewDiv);

//some text inside new div element
const h1 = document.createElement("h1");
const txt0 = document.createTextNode("I'm a div");
h1.appendChild(txt0);
NewDiv.appendChild(h1);

const p = document.createElement("p");
const txt1 = document.createTextNode("ME TOO!");
p.appendChild(txt1);
NewDiv.appendChild(p);