echo "Displaying content of $1 i uppercasing"
print "\n"
 cat $1 | tr '[:lower]' '[upper]'

