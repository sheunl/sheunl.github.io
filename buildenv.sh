#!/bin/bash

sudo apt install python3.8-venv
python3 -m venv venvn
. venvn/bin/activate
pip install -r requirements.txt