#!/usr/bin/python
import sys
import logging
logging.basicConfig(stream=sys.stderr)
sys.path.insert(0, "$HOME/pricing-cloud")

from Pricingcloud import app as application
