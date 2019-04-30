## Slow Valet

A simple example illustrating slow Curl requests between valet sites.

# Setup

1. Clone the repo
2. setup valet links

```bash
cd server
valet link slow-valet
cd ../client
valet link sub.slow-valet
```

3. Run the cient script

```
curl sub.slow-valet.test
```
