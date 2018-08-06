<?php
#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Bigcommerce\Tests\Unit\UnitTest;

#parse("PHP File Header.php")
/**
 * @coversDefaultClass
 */
class ${NAME} extends#if(${NAMESPACE}) UnitTest #else use UnitTest; #end{

}
