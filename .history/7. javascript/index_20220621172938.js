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


// output

> Object { value: 3, done: false }
> Object { value: 4, done: true }
> Object { value: undefined, done: true }


It works that way because what is being defined is an iterator. The next method allows to find the next element of the iterator. The error occurs when the next value of the iterator does not exist.