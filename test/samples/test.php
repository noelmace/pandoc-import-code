namespace my\name;
$c = new \my\name\MyClass;
$arr = [1,2,3];
trait ezcReflectionReturnInfo {
    function getReturnType() { /*1*/ }
    function getReturnDescription() { /*2*/ }
}

#region snippet
function gen_one_to_three() {
    for ($i = 1; $i &lt;= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}
#endregion snippet
