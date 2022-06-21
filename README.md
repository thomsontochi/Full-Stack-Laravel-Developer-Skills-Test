# Full-Stack-Laravel-Developer-Skills-Test
Full-Stack Laravel Developer Skills Test


PLEASE NOTE: Do not publicly post your answers on this Gist, please forward them to your recruiting contact instead ;-)

1. Voting
Each voter can vote in zero or more referenda. Each referendum has one or more questions, and each question is a yes/no vote. Write the simplest normalized schema to describe this in generic SQL statements or as an entity-relationship diagram. Point out where the indexes would be if you want to quickly know the results of a given referendum question, but you never expect to query a single voter's voting record. In what way does the nature of the application affect your design judgment about privacy, and what effect would that have on normalization considerations?

2. Rewriting history with git
You've getting ready to submit a pull request to the coolapp repo. You branch contains two commits: M, followed by N. The lineage is this:

main:   X --> Y --> Z (HEAD commit is Z)
                     \
your-branch:          M --> N (HEAD commit is N)
You want to contribute the code back to the official coolapp repo, but you realize there is a really dumb typo in one of your source code comments (not commit messages) in commit M. You'd still like to submit the pull request as two commits M' and N', where M' is the fixed version of M, and N' is the same exact diff as N. How do you rewrite git history to make this happen? Is N' the same hash as N? Why or why not?

3. Service Container
Consider the following Laravel controller:

   class MyController extends Controller
   {
       private $provider;
       
       public function __construct(MyContentProvider $provider)
       {
           $this->provider = $provider;
       }
       
       public function getContent()
       {
          return view('index', [ 'content' => $this->provider->get() ]);
       }
   }
When this controller is instantiated, a fresh instance of MyContentProvider is passed to the controller without any other code changes. How does Laravel know how to construct the Controller? What if MyServiceProvider has dependencies on its own? Explain how this works.

4. We're All Scratching Our Heads About This One
New code was released to multi-tier production environment and now the site is SO slow. But it worked great on the single-server staging environment, which has only half the CPU and half the RAM of the production servers!

Here's the code that's behaving poorly:

   class Post extends Model
   {
       public function comments()
       {
           $comment_ids = array_map(function ($comment) { return $comment->id; }, Comment::where("post_id", $this->id)->get()->toArray());
           return array_map(static function ($comment_id) { Comment::find($comment_id); }, $comment_ids);
       }
   }
What's wrong? And why did it work well (enough) on the staging server?

Obviously the person who wrote this isn't a Laravel programmer. How would a Laravel programmer have written the code?

5. Unix tools
In one Unix command, find all of the files in /tmp whose contents contain the word "foobar" (case-insensitive), and list them all in order from most-recently created to least-recently created.

6. CSS
Usage of the "!important" CSS declaration is often frowned upon by front-end developers. What does the "!important" CSS declaration do? Why do front-end developers suggest using it with caution? What are some cases in which it makes sense to use it?

7. JavaScript
Take a look at the following:

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
What is the output of this code snippet, and why does it behave in the way it does?
