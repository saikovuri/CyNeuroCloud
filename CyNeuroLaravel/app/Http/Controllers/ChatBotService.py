#!/Users/arjun_ac/anaconda3/bin/python

import sys
import ast
from watson_developer_cloud import ConversationV1

# Set up Conversation service.
conversation = ConversationV1(
  username = '12d20e4a-6f21-4d76-a6d3-d53336dcc33b', # replace with username from service key
  password = 'Pkp76O2NsEJ3', # replace with password from service key
  version = '2017-05-26'
)
workspace_id = '5a69f598-b189-46d7-a832-651ae67f2599' # replace with workspace ID

# Get user input and context form the command line arguments
user_input = sys.argv[1]
#user_input = "great tell me more about templates"

# Get context from the user request
context_argv = sys.argv[2]
#context_argv = "{'conversation_id': '6575b379-cfd7-4652-8ec5-e59145d8fcea', 'system': {'dialog_stack': [{'dialog_node': 'root'}], 'dialog_turn_counter': 1, 'dialog_request_counter': 1, '_node_output_map': {'node_11_1510771220248': [0]}, 'branch_exited': True, 'branch_exited_reason': 'completed'}}"

# convert json string into dictionary object
context_dict = ast.literal_eval(context_argv);
#print(type(context_dict))

# Send a user message to the bot and get the response
response = conversation.message(
	workspace_id = workspace_id,
    input = {
      'text': user_input
    },
    context = context_dict
 )

# Print the output from dialog, if any.
if response['output']['text']:
	print("VIDURA : " + response['output']['text'][0])

# Output the latest context 
print(response['context'])