
function isValid() {
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var message = document.getElementById('message');

    if (name.value == '' || password.email == '' || message.value == '') {
        alert('Fill the fields');
        return false;
    }

    return true;
}


// function test() {
//     var collection = document.getElementsByTagName('p');
//     var i, length;
    
//     length = collection.length;
    
//     for (i = 0; i < length; i++) {
//         collection[i].style.display = 'none';
//     }
    
    
    

    
//     // if (elem.style.display == 'none') {
//     //     elem.style.display = 'block';
//     // } else {
//     //     elem.style.display = 'none';
//     // }
// }

// var elem = document.getElementById('p-1');

// elem.innerHTML = 'new text';
// elem.style.display = 'none';

// console.log(elem.style);

// var x = confirm('Hello?');

// console.log(x);

// Student = function(name, age) {
    
//     var test = 1;
    
//     testMethod = function() {
//         console.log('hello from priv method')
//     }
    
//     this.name = name;
//     this.age = age;
    
//     this.go = function() {
//         testMethod();
//         console.log('I go');
//     }
// }

// var s1 = new Student('Nike', 32);
// var s2 = new Student('Abibas', 54);

// console.log(s1.test());

