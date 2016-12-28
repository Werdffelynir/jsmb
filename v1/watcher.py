import time
import fcntl
import os
import signal

FNAME = "src"
SYSCOMMAND = 'php -f parser.php'

def handler(signum, frame):
    try:
        os.system(SYSCOMMAND)
    except RuntimeError:
        pass

signal.signal(signal.SIGIO, handler)

fd = os.open(FNAME,  os.O_RDONLY)
fcntl.fcntl(fd, fcntl.F_NOTIFY, fcntl.DN_MODIFY | fcntl.DN_MULTISHOT)

while True:
    time.sleep(10000)