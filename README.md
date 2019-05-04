## Slow Valet

A simple example illustrating slow Curl requests between valet sites.

# Setup

1. Setup custom DNS servers for your mac, i.e. use Cloudflare's 1.1.1.1 and 1.0.0.1.  You can do this from the CLI for the Wifi connection like this:

```console
networksetup -setdnsservers 'Wi-fi' 1.1.1.1 1.0.0.1
```

2. Clone the repo
3. setup valet links

```console
cd server
valet link slow-valet
cd ../client
valet link sub.slow-valet
```

4. Run the cient script

```console
curl sub.slow-valet.test
```

Alternatively you can run the script from the CLI:

```console
php index.php
```
