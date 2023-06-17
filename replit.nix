{ pkgs }: {
	deps = [
		pkgs.unzip
  pkgs.wget
  pkgs.php74
    pkgs.php74Extensions.pdo
    pkgs.sqlite
	];
}