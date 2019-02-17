from lib.google_search_results import GoogleSearchResults

params = {
    "q" : "women in stem",
    "hl" : "en",
    "gl" : "us",
    "google_domain" : "google.com",
}

query = GoogleSearchResults(params)
dictionary_results = query.get_dictionary()
