# 実行方法

```sh
docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:8.1.5-cli php your-script.php
```
