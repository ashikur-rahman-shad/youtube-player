var elements, file,i;

function fetchContent(to, from){
    fetch(from)
    //calling the fetch function
    //fetch is an asynchronous(google it) proces
    //async means the next code won't wait for it
    //immediate after calling this method, 
        //the next code will get executed

    .then(result => result.text())
    //fetch returns a promise, we named it result.
    //We are calling the text() method
    //which is another promise a
    .then(data => {
       to.innerHTML = data;
    })
}

//array with all elements
elements = document.getElementsByTagName("*");

for(i=0;i<elements.length;i++){
    if(file=elements[i].getAttribute("load"))
        fetchContent(elements[i],file);
}

d
//writen by Ashikur Rahman Shad 
//I took some help from the link below 
//https://www.w3schools.com/howto/howto_html_include.asp 
//but I did it with fetch API instead of xhttp 