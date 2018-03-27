#!/usr/bin/env bash

# ONLY FOR UPDATING FORUM JS!!

# does not update admin JS

# This script compiles this extenion's assets so that they can be used in-browser.
# It should be run from the root directory of the extension.


base=$PWD
cd "${base}/js/forum"
if [ ! -d node_modules ]
then
    npm install
fi

gulp || exit 1

if [ -d  "$FLARUMASSETDIR" ]
then
    /bin/rm -f $FLARUMASSETDIR/forum*.js
    /bin/rm -f $FLARUMASSETDIR/*.js  $FLARUMASSETDIR/rev*
else
    echo "Missing or incorrect environment variable FLARUMASSETDIR."
    exit 1
fi
