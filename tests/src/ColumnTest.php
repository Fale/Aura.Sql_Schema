<?php
namespace Aura\Sql_Schema;

class ColumnTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $info = array(
            'name' => 'cost',
            'type' => 'numeric',
            'size' => 10,
            'scale' => 2,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
        );
        
        $col = new Column(
            $info['name'],
            $info['type'],
            $info['size'],
            $info['scale'],
            $info['notnull'],
            $info['default'],
            $info['autoinc'],
            $info['primary']
        );
        
        foreach ($info as $key => $expect) {
            $this->assertTrue(isset($col->$key));
            $this->assertSame($expect, $col->$key);
        }
    }
    
    public function test__isset()
    {
        
    }
    
    public function test__set_state()
    {
        $info = array(
            'name' => 'cost',
            'type' => 'numeric',
            'size' => 10,
            'scale' => 2,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
        );
        
        $col = new Column(
            $info['name'],
            $info['type'],
            $info['size'],
            $info['scale'],
            $info['notnull'],
            $info['default'],
            $info['autoinc'],
            $info['primary']
        );
        
        eval('$actual = ' . var_export($col, true) . ';');
        
        foreach ($info as $key => $expect) {
            $this->assertSame($expect, $actual->$key);
        }
    }
}
