#!/bin/bash

if [ "${TRAVIS_PULL_REQUEST}" = "1" ]; then
    echo "This is a pull request, nothing to deploy"
    exit
fi

echo encorephp.com > ./output_prod/CNAME

cd ./output_prod

git init
echo "https://${GH_TOKEN}:@github.com" > .git/credentials
git config user.email "${GIT_EMAIL}"
git config user.name "${GIT_NAME}"
git config credential.helper "store --file=.git/credentials"
git remote add origin https://github.com/encorephp/encorephp.com.git
git add -A
git commit -m "Deploy"
git push --force origin HEAD:gh-pages
