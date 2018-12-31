echo "pingpong"

git status

git add .
#git add -A
#git add -f .

echo Write your commit:
read cmmt
echo You commit: $cmmt
git commit -m "$cmmt </> $(date +"%a, %Y-%m-%d, %H:%M:%S %Z %j")"

git pull origin 9to5
git push origin 9to5
#git push -f origin 9to5

git status

$SHELL