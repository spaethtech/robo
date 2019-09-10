<?php
declare(strict_types=1);

namespace MVQN\Robo\Task\Sftp;

use Robo\Collection\CollectionBuilder;

trait loadTasks
{
    /**
     * @param string $host  The hostname of the remote server.
     * @param int $port     The port to use when connecting to the remote server, defaults to 22.
     *
     * @return Sftp
     */
    protected function taskSftp(string $host, int $port)
    {
        // Always construct your tasks with the task builder.
        return $this->task(Sftp::class, $host, $port);
    }

    // ...
}