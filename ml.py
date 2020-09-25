import urllib.request
import json

data = {
        "Inputs": {
                "input1":
                [
                    {
                            'a_name': "PJ Harvey",   
                            'title': "50 Ft Queenie",   
                            'lyrics': "Hey I'm one big queen  No one can stop me Red light red green Sat back, I'm watching I'm number one  Second to no one No sweat I'm clean  Nothing can touch me  I'll tell you my name  F U C K 50ft queenie  Force ten hurricane Biggest woman  I could have ten sons Ten gods  Ten queens Ten foot and risi...",   
                            'spot_id': "3fJprjhRxTVtOp18EHdNfu",   
                            'tempo': "126.366",   
                            'energy': "0.667",   
                            'danceability': "0.382",   
                            'loudness': "-16.077",   
                            'valence': "0.718",   
                            'acousticness': "0.000652",   
                            'Mood': "Angry",   
                    }
                ],
        },
    "GlobalParameters":  {
    }
}

body = str.encode(json.dumps(data))

url = 'https://ussouthcentral.services.azureml.net/workspaces/ad9b36a5ce834694a9f8850cef897196/services/2cfe31ad93194dfd95b176ec5d1cf176/execute?api-version=2.0&format=swagger'
api_key = 'BljlOcXnQSdpEtRf698KS4N+aPsafKTJfNIQK1zIRmg+UeenLX7ZeiX7cjFKq98izsr1Bny9vXiflAXF/Zn7vw==' # Replace this with the API key for the web service
headers = {'Content-Type':'application/json', 'Authorization':('Bearer '+ api_key)}

req = urllib.request.Request(url, body, headers)

try:
    response = urllib.request.urlopen(req)

    result = response.read()
    print(result)
except urllib.error.HTTPError as error:
    print("The request failed with status code: " + str(error.code))

    # Print the headers - they include the requert ID and the timestamp, which are useful for debugging the failure
    print(error.info())
    print(json.loads(error.read().decode("utf8", 'ignore')))