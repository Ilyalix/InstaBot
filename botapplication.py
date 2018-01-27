import sys
import os
import argparse

sys.path.append(os.path.join(sys.path[0], '../'))

from instabot import Bot

parser = argparse.ArgumentParser(add_help=True)
parser.add_argument('-u', type=str, help="username")
parser.add_argument('-p', type=str, help="password")
parser.add_argument('-w', type=str, help="worker")
args = parser.parse_args()

bot = Bot()
bot.login(username=args.u, password=args.p)
ids = bot.get_userid_from_username(args.w)

# print(ids)

bot.follow(ids)

# bot.save_user_stats(args.w)



# botapplication.py -u ilya_lix86 -p sled17414457 -w kudago

