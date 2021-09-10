rm -f ./temp/etc/tor/torrc

if [ -z "$PORT" ]
then
    echo -e "No PORT,Starting tor with  default port 4000 \n\n"
    PORT=4000
else
    echo -e "Ok, starting tor with $PORT \n\n"
fi
echo "HiddenServiceDir ./temp/var/lib/tor/hidden_service" >> ./temp/etc/tor/torrc
echo "HiddenServicePort 80 127.0.0.1:$PORT" >> ./temp/etc/tor/torrc
tor -f ./temp/etc/tor/torrc
