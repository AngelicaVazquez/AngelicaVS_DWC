function inicio(){

    var xNodes = document.documentElement.childNodes;
    xNodes = Array.from(xNodes).length;
    xChildNodes = document.childNodes;
    xChildNodes = Array.from(xChildNodes).length;
    document.getElementById("demo").innerHTML = "total de nodos: " + xNodes + xChildNodes;
    

    var nodeTree = getNodeTree(document.documentElement);
    console.log(nodeTree);

function getNodeTree(node) {
    if (node.hasChildNodes()) {
        var children = [];
        for (var j = 0; j < node.childNodes.length; j++) {
            children.push(getNodeTree(node.childNodes[j]));
        }

        return {
            nodeName: node.nodeName,
            parentName: node.parentNode.nodeName,
            children: children,
            content: node.innerText || "",
        };
    }

    return false;
}

function muestraArbol(node) {
	if (!node) return "";
    
    var txt = "";
	
    if (node.children.length > 0) {
        txt += "...Nodo: " + node.nodeName + "<br>";
        txt += "...Padre: " + node.parentName + "<br>";
        txt += "...Contenido: " + node.content + "<br>";
        for (var i = 0; i < node.children.length; i++)
        	if (node.children[i])
            	txt += "......" + muestraArbol(node.children[i]) + "<br>";
    }
    return txt;
}
    document.getElementById("result").innerHTML = muestraArbol(nodeTree);
}