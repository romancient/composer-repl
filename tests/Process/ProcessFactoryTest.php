<?php

declare(strict_types=1);

namespace Ramsey\Test\Dev\Repl\Process;

use Ramsey\Dev\Repl\Process\ProcessFactory;
use Ramsey\Test\Dev\Repl\RamseyTestCase;
use Symfony\Component\Process\Process;

class ProcessFactoryTest extends RamseyTestCase
{
    public function testFactory(): void
    {
        $factory = new ProcessFactory();

        $this->assertInstanceOf(Process::class, $factory->factory(['ls']));
    }
}
