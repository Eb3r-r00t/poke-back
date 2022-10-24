#!/bin/bash

# get the path of the current folder
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

# get the file commands.txt and add it to zsh
cat $DIR/commands.txt >> ~/.zshrc
source ~/.zshrc

# do the same to bash
cat $DIR/commands.txt >> ~/.bashrc
source ~/.bashrc
