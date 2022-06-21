// Take a look at the following:

function *foo(x) {
  while (x < 4) {
    x += yield x;
  }
  return x;
}
var bar = foo(3);
console.log( bar.next(1) );
console.log( bar.next(1) );
console.log( bar.next(1) );
// What is the output of this code snippet, and why does it behave in the way it does?

// output


