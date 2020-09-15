# Evaluating the Security of Password Manager Extensions

This project was submitted as a final project for the 14-828 Browser Security class. Read [our final paper](Browser_Security_Final_Paper.pdf).

# Source code

The source code in this repository consists of testing files used to help obtain some of our results.

The server can be run using Docker Compose as follows:
```
sudo docker-compose up -d
```

Furthermore, it relies on the bank.local and evil.local domains resolving
to localhost. This can be accomplished by adding to the hosts file:

```
127.0.0.1 evil.local
127.0.0.1 bank.local
```

In order for your browser to trust the HTTPS sites for evil.local and
bank.local, you need to get Chrome to trust the root authority in `rootCA.pem` (instructions vary by operating system, but search for "Manage
certificates" in the Chrome settings, and check under "More").

The authority and certificate was generated following instructions from
the website:

https://www.freecodecamp.org/news/how-to-get-https-working-on-your-local-development-environment-in-5-minutes-7af615770eec/
